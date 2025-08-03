Public Class MainForm
    Public Shared Bookmark As New Bookmark()
    Public Shared Wardrobe As New Wardrobe()
    Public Shared OutfitPairing As New OutfitPairing()
    Public Shared Profile As New Profile()

    Private Sub MainForm_Load_1(sender As Object, e As EventArgs) Handles MyBase.Load
        switchPanel(Wardrobe)
    End Sub

    Private Sub MainForm_Load(sender As Object, e As EventArgs)
        switchPanel(Wardrobe)
    End Sub
    Private Sub btnWardrobe_Click(sender As Object, e As EventArgs) Handles btnWardrobe.Click
        switchPanel(Wardrobe)
    End Sub
    Private Sub btnOutfitPairing_Click(sender As Object, e As EventArgs) Handles btnOutfitPairing.Click
        switchPanel(OutfitPairing)
    End Sub
    Private Sub btnProfile_Click(sender As Object, e As EventArgs) Handles btnProfile.Click
        switchPanel(Profile)
    End Sub
    Private Sub btnBookmark_Click(sender As Object, e As EventArgs) Handles btnBookmark.Click
        switchPanel(Bookmark)
    End Sub
    'Private Sub btnShopping_Click(sender As Object, e As EventArgs) Handles btnShopping.Click
    '    switchPanel(FitMakerShop)
    'End Sub
    Sub switchPanel(ByVal panel As Form)
        pnlForAll.Controls.Clear()
        panel.TopLevel = False
        panel.FormBorderStyle = FormBorderStyle.None
        panel.Dock = DockStyle.Fill
        pnlForAll.Controls.Add(panel)
        panel.Show()
    End Sub

    Private Sub Panel2_Paint(sender As Object, e As PaintEventArgs)

    End Sub

    Private Sub Panel3_Paint(sender As Object, e As PaintEventArgs) Handles Panel3.Paint

    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles btnShopping.Click

    End Sub
End Class
