<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class MainForm
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()>
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()>
    Private Sub InitializeComponent()
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(MainForm))
        Me.pnlContent = New System.Windows.Forms.Panel()
        Me.btnLogOut = New System.Windows.Forms.Button()
        Me.btnProfile = New System.Windows.Forms.Button()
        Me.btnBookmark = New System.Windows.Forms.Button()
        Me.btnOutfitPairing = New System.Windows.Forms.Button()
        Me.btnWardrobe = New System.Windows.Forms.Button()
        Me.Panel3 = New System.Windows.Forms.Panel()
        Me.PictureBox1 = New System.Windows.Forms.PictureBox()
        Me.pnlForAll = New System.Windows.Forms.Panel()
        Me.btnShopping = New System.Windows.Forms.Button()
        Me.pnlContent.SuspendLayout()
        Me.Panel3.SuspendLayout()
        CType(Me.PictureBox1, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'pnlContent
        '
        Me.pnlContent.BackColor = System.Drawing.Color.FromArgb(CType(CType(164, Byte), Integer), CType(CType(144, Byte), Integer), CType(CType(124, Byte), Integer))
        Me.pnlContent.Controls.Add(Me.btnShopping)
        Me.pnlContent.Controls.Add(Me.btnLogOut)
        Me.pnlContent.Controls.Add(Me.btnProfile)
        Me.pnlContent.Controls.Add(Me.btnBookmark)
        Me.pnlContent.Controls.Add(Me.btnOutfitPairing)
        Me.pnlContent.Controls.Add(Me.btnWardrobe)
        Me.pnlContent.Controls.Add(Me.Panel3)
        Me.pnlContent.Dock = System.Windows.Forms.DockStyle.Left
        Me.pnlContent.Location = New System.Drawing.Point(0, 0)
        Me.pnlContent.Name = "pnlContent"
        Me.pnlContent.Size = New System.Drawing.Size(230, 553)
        Me.pnlContent.TabIndex = 3
        '
        'btnLogOut
        '
        Me.btnLogOut.Dock = System.Windows.Forms.DockStyle.Bottom
        Me.btnLogOut.FlatAppearance.BorderSize = 0
        Me.btnLogOut.FlatStyle = System.Windows.Forms.FlatStyle.Flat
        Me.btnLogOut.Font = New System.Drawing.Font("Segoe UI", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnLogOut.ForeColor = System.Drawing.Color.White
        Me.btnLogOut.Image = CType(resources.GetObject("btnLogOut.Image"), System.Drawing.Image)
        Me.btnLogOut.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnLogOut.Location = New System.Drawing.Point(0, 511)
        Me.btnLogOut.Name = "btnLogOut"
        Me.btnLogOut.Size = New System.Drawing.Size(230, 42)
        Me.btnLogOut.TabIndex = 8
        Me.btnLogOut.Text = "Logout"
        Me.btnLogOut.TextAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnLogOut.TextImageRelation = System.Windows.Forms.TextImageRelation.ImageBeforeText
        Me.btnLogOut.UseVisualStyleBackColor = True
        '
        'btnProfile
        '
        Me.btnProfile.Dock = System.Windows.Forms.DockStyle.Top
        Me.btnProfile.FlatAppearance.BorderSize = 0
        Me.btnProfile.FlatStyle = System.Windows.Forms.FlatStyle.Flat
        Me.btnProfile.Font = New System.Drawing.Font("Segoe UI", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnProfile.ForeColor = System.Drawing.Color.White
        Me.btnProfile.Image = CType(resources.GetObject("btnProfile.Image"), System.Drawing.Image)
        Me.btnProfile.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnProfile.Location = New System.Drawing.Point(0, 305)
        Me.btnProfile.Name = "btnProfile"
        Me.btnProfile.Size = New System.Drawing.Size(230, 42)
        Me.btnProfile.TabIndex = 7
        Me.btnProfile.Text = "Profile"
        Me.btnProfile.TextAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnProfile.TextImageRelation = System.Windows.Forms.TextImageRelation.ImageBeforeText
        Me.btnProfile.UseVisualStyleBackColor = True
        '
        'btnBookmark
        '
        Me.btnBookmark.Dock = System.Windows.Forms.DockStyle.Top
        Me.btnBookmark.FlatAppearance.BorderSize = 0
        Me.btnBookmark.FlatStyle = System.Windows.Forms.FlatStyle.Flat
        Me.btnBookmark.Font = New System.Drawing.Font("Segoe UI", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnBookmark.ForeColor = System.Drawing.Color.White
        Me.btnBookmark.Image = CType(resources.GetObject("btnBookmark.Image"), System.Drawing.Image)
        Me.btnBookmark.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnBookmark.Location = New System.Drawing.Point(0, 263)
        Me.btnBookmark.Name = "btnBookmark"
        Me.btnBookmark.Size = New System.Drawing.Size(230, 42)
        Me.btnBookmark.TabIndex = 6
        Me.btnBookmark.Text = "Bookmark"
        Me.btnBookmark.TextAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnBookmark.TextImageRelation = System.Windows.Forms.TextImageRelation.ImageBeforeText
        Me.btnBookmark.UseVisualStyleBackColor = True
        '
        'btnOutfitPairing
        '
        Me.btnOutfitPairing.Dock = System.Windows.Forms.DockStyle.Top
        Me.btnOutfitPairing.FlatAppearance.BorderSize = 0
        Me.btnOutfitPairing.FlatStyle = System.Windows.Forms.FlatStyle.Flat
        Me.btnOutfitPairing.Font = New System.Drawing.Font("Segoe UI", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnOutfitPairing.ForeColor = System.Drawing.Color.White
        Me.btnOutfitPairing.Image = CType(resources.GetObject("btnOutfitPairing.Image"), System.Drawing.Image)
        Me.btnOutfitPairing.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnOutfitPairing.Location = New System.Drawing.Point(0, 221)
        Me.btnOutfitPairing.Name = "btnOutfitPairing"
        Me.btnOutfitPairing.Size = New System.Drawing.Size(230, 42)
        Me.btnOutfitPairing.TabIndex = 5
        Me.btnOutfitPairing.Text = "Outfit Pairing"
        Me.btnOutfitPairing.TextAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnOutfitPairing.TextImageRelation = System.Windows.Forms.TextImageRelation.ImageBeforeText
        Me.btnOutfitPairing.UseVisualStyleBackColor = True
        '
        'btnWardrobe
        '
        Me.btnWardrobe.Dock = System.Windows.Forms.DockStyle.Top
        Me.btnWardrobe.FlatAppearance.BorderSize = 0
        Me.btnWardrobe.FlatStyle = System.Windows.Forms.FlatStyle.Flat
        Me.btnWardrobe.Font = New System.Drawing.Font("Segoe UI", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnWardrobe.ForeColor = System.Drawing.Color.White
        Me.btnWardrobe.Image = CType(resources.GetObject("btnWardrobe.Image"), System.Drawing.Image)
        Me.btnWardrobe.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnWardrobe.Location = New System.Drawing.Point(0, 179)
        Me.btnWardrobe.Name = "btnWardrobe"
        Me.btnWardrobe.Size = New System.Drawing.Size(230, 42)
        Me.btnWardrobe.TabIndex = 4
        Me.btnWardrobe.Text = "Wardobe"
        Me.btnWardrobe.TextAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnWardrobe.TextImageRelation = System.Windows.Forms.TextImageRelation.ImageBeforeText
        Me.btnWardrobe.UseVisualStyleBackColor = True
        '
        'Panel3
        '
        Me.Panel3.BackColor = System.Drawing.Color.FromArgb(CType(CType(200, Byte), Integer), CType(CType(182, Byte), Integer), CType(CType(166, Byte), Integer))
        Me.Panel3.Controls.Add(Me.PictureBox1)
        Me.Panel3.Dock = System.Windows.Forms.DockStyle.Top
        Me.Panel3.Location = New System.Drawing.Point(0, 0)
        Me.Panel3.Name = "Panel3"
        Me.Panel3.Size = New System.Drawing.Size(230, 179)
        Me.Panel3.TabIndex = 0
        '
        'PictureBox1
        '
        Me.PictureBox1.Image = CType(resources.GetObject("PictureBox1.Image"), System.Drawing.Image)
        Me.PictureBox1.Location = New System.Drawing.Point(26, 23)
        Me.PictureBox1.Name = "PictureBox1"
        Me.PictureBox1.Size = New System.Drawing.Size(170, 130)
        Me.PictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom
        Me.PictureBox1.TabIndex = 0
        Me.PictureBox1.TabStop = False
        '
        'pnlForAll
        '
        Me.pnlForAll.Dock = System.Windows.Forms.DockStyle.Top
        Me.pnlForAll.Location = New System.Drawing.Point(230, 0)
        Me.pnlForAll.Name = "pnlForAll"
        Me.pnlForAll.Size = New System.Drawing.Size(852, 553)
        Me.pnlForAll.TabIndex = 9
        '
        'btnShopping
        '
        Me.btnShopping.Dock = System.Windows.Forms.DockStyle.Top
        Me.btnShopping.FlatAppearance.BorderSize = 0
        Me.btnShopping.FlatStyle = System.Windows.Forms.FlatStyle.Flat
        Me.btnShopping.Font = New System.Drawing.Font("Segoe UI", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnShopping.ForeColor = System.Drawing.Color.White
        Me.btnShopping.Image = CType(resources.GetObject("btnShopping.Image"), System.Drawing.Image)
        Me.btnShopping.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnShopping.Location = New System.Drawing.Point(0, 347)
        Me.btnShopping.Name = "btnShopping"
        Me.btnShopping.Size = New System.Drawing.Size(230, 42)
        Me.btnShopping.TabIndex = 9
        Me.btnShopping.Text = "Clothes Shopping"
        Me.btnShopping.TextAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnShopping.TextImageRelation = System.Windows.Forms.TextImageRelation.ImageBeforeText
        Me.btnShopping.UseVisualStyleBackColor = True
        '
        'MainForm
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(8.0!, 18.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.AutoScroll = True
        Me.ClientSize = New System.Drawing.Size(1082, 553)
        Me.Controls.Add(Me.pnlForAll)
        Me.Controls.Add(Me.pnlContent)
        Me.Font = New System.Drawing.Font("Palatino Linotype", 7.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Name = "MainForm"
        Me.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen
        Me.Text = "Main Form"
        Me.pnlContent.ResumeLayout(False)
        Me.Panel3.ResumeLayout(False)
        CType(Me.PictureBox1, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)

    End Sub
    Friend WithEvents pnlContent As Panel
    Friend WithEvents Panel3 As Panel
    Friend WithEvents btnBookmark As Button
    Friend WithEvents btnOutfitPairing As Button
    Friend WithEvents btnWardrobe As Button
    Friend WithEvents btnProfile As Button
    Friend WithEvents btnLogOut As Button
    Friend WithEvents pnlForAll As Panel
    Friend WithEvents PictureBox1 As PictureBox
    Friend WithEvents btnShopping As Button
End Class
