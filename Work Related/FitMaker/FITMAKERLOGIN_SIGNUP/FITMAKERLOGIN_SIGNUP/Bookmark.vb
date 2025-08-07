Public Class Bookmark

    Public Sub AddBookmarkedOutfit(outfitGroup As FlowLayoutPanel, mood As String)
        ' Main horizontal container for each bookmarked outfit
        Dim containerPanel As New FlowLayoutPanel()
        containerPanel.FlowDirection = FlowDirection.TopDown
        containerPanel.WrapContents = False
        containerPanel.AutoSize = True
        containerPanel.Padding = New Padding(10)
        containerPanel.Margin = New Padding(10)
        containerPanel.BorderStyle = BorderStyle.FixedSingle

        ' Inner panel to display outfit items stacked vertically
        Dim verticalOutfitPanel As New FlowLayoutPanel()
        verticalOutfitPanel.FlowDirection = FlowDirection.TopDown
        verticalOutfitPanel.WrapContents = False
        verticalOutfitPanel.AutoSize = True
        verticalOutfitPanel.AutoSizeMode = AutoSizeMode.GrowAndShrink
        verticalOutfitPanel.Dock = DockStyle.Fill


        MessageBox.Show("Cloning " & outfitGroup.Controls.Count & " items.")
        ' Clone each outfit item (Panel with PictureBox and Label) vertically
        For Each ctrl As Control In outfitGroup.Controls
            verticalOutfitPanel.Controls.Add(CloneControl(ctrl))
        Next

        ' Mood label centered
        Dim lblMood As New Label()
        lblMood.Text = "Mood: " & mood
        lblMood.Font = New Font("Segoe UI", 14, FontStyle.Bold)
        lblMood.AutoSize = True
        lblMood.TextAlign = ContentAlignment.MiddleCenter
        lblMood.Margin = New Padding(0, 10, 0, 0)
        lblMood.Anchor = AnchorStyles.Top
        lblMood.Dock = DockStyle.None

        ' Add to main container
        containerPanel.Controls.Add(verticalOutfitPanel)
        containerPanel.Controls.Add(lblMood)

        ' Add to Bookmark FlowLayoutPanel
        flpBookmark.Controls.Add(containerPanel)
    End Sub

    Private Function CloneControl(ctrl As Control) As Control
        If TypeOf ctrl Is FlowLayoutPanel Then
            Dim original = CType(ctrl, FlowLayoutPanel)
            Dim clone As New FlowLayoutPanel()
            clone.FlowDirection = original.FlowDirection
            clone.WrapContents = original.WrapContents
            clone.AutoSize = original.AutoSize
            clone.Margin = original.Margin
            For Each child In original.Controls
                clone.Controls.Add(CloneControl(child))
            Next
            Return clone

        ElseIf TypeOf ctrl Is Panel Then
            Dim original = CType(ctrl, Panel)
            Dim clone As New Panel()
            clone.Size = original.Size
            clone.BackColor = original.BackColor
            clone.Margin = New Padding(10)
            For Each child In original.Controls
                clone.Controls.Add(CloneControl(child))
            Next
            Return clone

        ElseIf TypeOf ctrl Is PictureBox Then
            Dim original = CType(ctrl, PictureBox)
            Dim clone As New PictureBox()
            clone.Image = original.Image
            clone.Size = original.Size
            clone.SizeMode = original.SizeMode
            Return clone

        ElseIf TypeOf ctrl Is Label Then
            Dim original = CType(ctrl, Label)
            Dim clone As New Label()
            clone.Text = original.Text
            clone.Font = original.Font
            clone.TextAlign = original.TextAlign
            clone.AutoSize = original.AutoSize
            Return clone

        Else
            Return Nothing
        End If
    End Function


End Class
